<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Project extends Model
class Project
{
    // use HasFactory;

    public static $projects = [
        [
            'id' => 1,
            'name' => 'Proyecto A',
            'start_date' => '2023-01-01',
            'status' => 'En progreso',
            'responsible' => 'Juan Pérez',
            'amount' => 1000000.00,
        ],
        [
            'id' => 2,
            'name' => 'Proyecto B',
            'start_date' => '2023-02-01',
            'status' => 'Completado',
            'responsible' => 'Ana López',
            'amount' => 1500000.00,
        ],
    ];

    public static function getAll()
    {
        return collect(self::$projects);
    }

    public static function find($id)
    {
        return collect(self::$projects)->firstWhere('id', $id);
    }

    public static function create($data)
    {
        $data['id'] = end(self::$projects)['id'] + 1;
        self::$projects[] = $data;
        return $data;
    }

    public static function updateByID($id, $data)
    {
        $index = array_search($id, array_column(self::$projects, 'id'));
        if ($index !== false) {
            self::$projects[$index] = array_merge(self::$projects[$index], $data);
            return self::$projects[$index];
        }
        return null;
    }

    public static function destroy($id)
    {
        $index = array_search($id, array_column(self::$projects, 'id'));
        if ($index !== false) {
            array_splice(self::$projects, $index, 1);
            return true;
        }
        return false;
    }
}
