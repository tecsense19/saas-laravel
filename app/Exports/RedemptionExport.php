<?php

namespace App\Exports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RedemptionExport implements FromCollection, WithHeadings
{
    protected $data;

    public function __construct(Collection $data)
    {
        $this->data = $data;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return $this->data->map(function ($member) {
            return [
                'Id' => $member->id,
                'Name' => $member->getUser ? $member->getUser->name : '',
                'Mobile Number' => $member->getUser ? $member->getUser->mobile_no : '',
                'Amount' => $member->total_point,
                'Bank Name' => $member->getUser->bankAccount ? $member->getUser->bankAccount->bank_name : '',
                'Branch Name' => $member->getUser->bankAccount ? $member->getUser->bankAccount->branch_name : '',
                'Ifsc Code' => $member->getUser->bankAccount ? $member->getUser->bankAccount->ifsc_code : '',
                'A/C Holder Name' => $member->getUser->bankAccount ? $member->getUser->bankAccount->ac_holder_name : '',
                'Account Number' => $member->getUser->bankAccount ? "'".$member->getUser->bankAccount->account_number : '',
                'Transaction ID' => '',
                'Credited Amount' => '',
                'Credited Date' => '',
            ];
        });
    }

    public function headings(): array
    {
        return [
            'Id', 'Name', 'Mobile Number', 'Amount', 'Bank Name', 'Branch Name', 'Ifsc Code', 'A/C Holder Name', 'Account Number', 'Transaction ID', 'Credited Amount', 'Credited Date'
        ];
    }
}
