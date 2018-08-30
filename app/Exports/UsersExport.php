<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection,WithMapping,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::all();
    }


    // Mapping the tables in the DB to the visual representation
    public function headings(): array
    {
        return [
            'User ID',
            'Name',
            'Email',
            'Admin Or Not',
            'Created Date',
            'Updated Date',
            
        ];
    }

    public function map($user): array
    {
        return [
            $user->id,
            $user->name,
            $user->email,
            $user->isAdmin,
            $user->created_at,
            $user->updated_at,


        ];
    }
}
