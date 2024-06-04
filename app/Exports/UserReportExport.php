<?php

namespace App\Exports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UserReportExport implements FromCollection, WithHeadings
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
                'Name' => $member->name ? $member->name : '',
                'Email' => $member->email ? $member->email : '',
                'Mobile No.' => $member->mobile_no ? $member->mobile_no : ''
            ];
        });
    }

    public function headings(): array
    {
        return [
            'Id', 'Name', 'Email', 'Mobile No.'
        ];
    }
}
