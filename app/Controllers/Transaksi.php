<?php

namespace App\Controllers;
use App\Libraries\datatable;
use Config\Database;
use CodeIgniter\RESTful\ResourceController;

class Transaksi extends ResourceController
{   
    
    public $table = "transaksi";
    public $primaryKey = "transaksi_id";
    
    public $toSearch = 
    [
        'transaksi.',
        // 'va_owner.va',
        // 'va_owner.hp'
        // 'Divisi.divisi_nama'
    ];

    public $selectList= [
            'transaksi.*',
            // 'va_owner.*'
    ];

    public $fieldList = [
        ['transaksi_va','ID Transaksi'],
        ['nominal','Nominal'],
        ['tanggal','Tanggal']
        // ['anggota_nama','Anggota Nama'],
        // ['va','VA'],
        // ['hp','No. HP']
    ];


    public $joinTable = [
        // ['va_owner','va_owner.id_jukir = anggota_id','left']
        // ['Divisi','Divisi.divisi_id = Guru.divisi_id','left']
        // ['kelompok', 'guru.guru_id = kelompok.guru_id','left']
        // ['kelompok', 'kelompok.guru_id = guru.guru_id','left']
    ];

    public $where = [
      // 'Divisi.divisi_id' => ''
    ];

    // public $orderBy = ['va_owner.va' => 'DESC'];

    public $dataToShow = [];

    public function __construct()
    {
        $this->dataToShow = [
            'fieldList'        => $this->fieldList,
            'table' => $this->table,
            'primaryKey'    => $this->primaryKey,
        ];
    }

    public function index()
    {
        return view('/pages/transaksi/index',$this->dataToShow);
    }

    public function list(){

    }

    public function data(){
        $builder = Database::connect()->table($this->table);
        // $builder->select($this->table.'.*');

         $builder->select(implode(', ', $this->selectList));
        if (!empty($this->joinTable)) {
            foreach ($this->joinTable as $join) {
                    // $join[0] = join table name
                    // $join[1] = join condition
                // $builder->select($join[0] . '.*');
                $builder->join($join[0], $join[1],$join[2]);
            }
        }
        $builder->where($this->table.'.deleted_at',NULL);;

        
        $builder->where($this->where);
           

        if (!empty($this->orderBy)) {
            if (is_array($this->orderBy)) {
                // Handle multiple order conditions
                foreach ($this->orderBy as $key => $value) {
                    if (is_numeric($key) && is_array($value)) {
                        $builder->orderBy($value[0], $value[1]); // [['name', 'ASC']]
                    } else {
                        $builder->orderBy($key, $value); // ['name' => 'ASC']
                    }
                }
            } else {
                // Assume it's a string like "name ASC"
                [$column, $direction] = explode(' ', $this->orderBy);
                $builder->orderBy($column, $direction);
            }
        }

        if (!empty($this->groupBy)) {
            
                // string — can be one or more columns separated by commas
                $builder->groupBy($this->groupBy);
            
        }

        $datatable = new Datatable();

        return $datatable->generate($builder, $this->table.'.'.$this->primaryKey, $this->toSearch);
    }


}
