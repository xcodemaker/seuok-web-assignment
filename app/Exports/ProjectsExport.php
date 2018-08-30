<?php

namespace App\Exports;

use App\project;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProjectsExport implements FromCollection,WithMapping,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return project::all();
    }

    public function headings(): array
    {
        return [
            'Project ID',
            'Project Title',
            'Project Status',
            'User ID',
            'Created Date',
            'Updated Date',
            
        ];
    }

    public function map($project): array
    {
        return [
            $project->id,
            $project->title,
            $project->description,
            $project->status,
            $project->created_at,
            $project->updated_at,


        ];
    }
}
