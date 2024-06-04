<?php

namespace App\Exports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EventReportExport implements FromCollection, WithHeadings
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
                'Event Name' => $member->event_title ? $member->event_title : '-',
                'Event Location' => $member->event_location ? $member->event_location : '-',
                'Event City' => $member->cities ? $member->cities->name : '-',
                'Event State' => $member->states ? $member->states->name : '-',
                'Total User' => $member->getEventUser ? count($member->getEventUser) : 0
            ];
        });
    }

    public function headings(): array
    {
        return [
            'Id', 'Event Name', 'Event Location', 'Event City', 'Event State', 'Total User'
        ];
    }
}
