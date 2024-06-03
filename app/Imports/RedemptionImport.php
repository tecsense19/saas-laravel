<?php

namespace App\Imports;

use App\Models\{
    ScanBarcode
};

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;

use Auth;

class RedemptionImport implements ToCollection, WithStartRow
{
    private $isValidHeaderSequence = true;

    /**
     * @return int
     */
    public function startRow(): int
    {
        return 1; // Skip the first row (header)
    }

    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        // Define the expected sequence of headers
        $expectedHeaders = [
            'Id', 'Name', 'Mobile Number', 'Amount', 'Bank Name', 'Branch Name', 'Ifsc Code',
            'A/C Holder Name', 'Account Number', 'Transaction ID', 'Credited Amount', 'Credited Date'
        ];

        // Get the headers from the first row
        $actualHeaders = $rows->first()->toArray();

        $this->isValidHeaderSequence = $this->matchHeaderSequence($expectedHeaders, $actualHeaders);
        // Proceed with importing the data if header sequence is valid
        if ($this->isValidHeaderSequence) {
            foreach ($rows->skip(1) as $row) { 
                if(isset($row[0]) && $row[0] != '')
                {
                    // Check database entry exist or not
                    $checkIds = ScanBarcode::where('id', $row[0])->first();
                    
                    if($checkIds)
                    {
                        ScanBarcode::where('id', $row[0])->update([
                            'paid_date' => $row[11] ? date('Y-m-d H:i:s', strtotime($row[11])) : '',
                            'transaction_id' => $row[9] ? $row[9] : '',
                            'paid_status' => 'Success',
                            'updated_by' => Auth::user()->id,
                        ]);
                    }
                }
            };
            
            return true;
        }
    }

    /**
     * Check if the actual headers match the expected sequence.
     *
     * @param array $expected
     * @param array $actual
     * @return bool
     */
    private function matchHeaderSequence(array $expected, array $actual): bool
    {
        // Check if both arrays have the same length
        if (count($expected) !== count($actual)) {
            return false;
        }

        // Iterate over each header and compare against the expected sequence
        foreach ($actual as $index => $header) {
            if ($header !== $expected[$index]) {
                return false;
            }
        }

        return true;
    }

    /**
     * Get the validation result of header sequence.
     *
     * @return bool
     */
    public function isValidHeaderSequence(): bool
    {
        return $this->isValidHeaderSequence;
    }
}
