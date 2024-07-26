<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Project extends Model
class Project
{
    // use HasFactory;

    private static $projects = [
        [
            'id' => 1,
            'name' => 'Project A',
            'start_date' => '2023-01-01',
            'status' => 'Ongoing',
            'responsible' => 'John Doe',
            'amount' => 1000
        ],
        [
            'id' => 2,
            'name' => 'Project B',
            'start_date' => '2023-02-01',
            'status' => 'Completed',
            'responsible' => 'Jane Smith',
            'amount' => 2000
        ]
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
        $data['id'] = count(self::$projects) + 1;
        self::$projects[] = $data;
    }

    public static function updateByID($id, $data)
    {
        foreach (self::$projects as &$project) {
            if ($project['id'] == $id) {
                $project = array_merge($project, $data);
                return true;
            }
        }
        return false;
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
