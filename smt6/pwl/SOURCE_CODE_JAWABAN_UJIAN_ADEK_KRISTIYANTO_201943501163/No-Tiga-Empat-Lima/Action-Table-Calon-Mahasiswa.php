<?php

namespace Action;
use Connection\Koneksi;

require_once './Koneksi.php';

class ActionTableCalonMahasiswa 
{
    private ?\PDO $connect =null;

    public function __construct()
    {
        $this->connect = Koneksi::getConnection();

            $arrInput = [];
            if(!empty($_POST['delete'])){
                $arrInput['kode'  ]  = $_POST['delete'  ];
            }else{
                $arrInput['kode'  ] = $_POST['kode'  ] ?? null;
            }

            $arrInput['nama'  ] = $_POST['name'  ] ?? null;
            $arrInput['alamat'] = $_POST['alamat'] ?? null;
            $arrInput['telp'  ] = $_POST['telp'  ] ?? null;

            try {
                // checking
                $query = $this->connect->prepare(
                    "SELECT * from table_calon_mhs where kode_calon_mhs = ?"
                );   
        
                $query->execute([$arrInput['kode']]);
                $output = $query->fetch();
                
                if($output == false){
                    // create
                    $this->create($arrInput);
                }else {
                    if($arrInput['nama'] == null){
                        $this->delete($arrInput['kode'  ]);
                    }else{
                        // update
                        $this->update($arrInput);
                    }
                }
                //code...
            } catch (\Throwable $th) {
                throw $th;
            }
    }

    public function create(array $req)
    {

        $query = $this->connect->prepare(
            "INSERT INTO 
            table_calon_mhs(kode_calon_mhs, nama_calon_mhs, alamat, telp)
            VALUES(?, ?, ?, ?)"
        );

        $query->execute([
            $req['kode'  ],
            $req['nama'  ],
            $req['alamat'],
            $req['telp'  ]
        ]);

        $query->closeCursor();
    }
    public function update(array $req)
    {
        $query = $this->connect->prepare( 
            "UPDATE table_calon_mhs SET 
                nama_calon_mhs = ?,
                alamat = ?,
                telp = ?
                WHERE kode_calon_mhs = ?"
        );

        $query->execute([
            $req['nama'  ],
            $req['alamat'],
            $req['telp'  ],
            $req['kode'  ]
        ]);

        $query->closeCursor();
    }
    public function delete(string $kode)
    {

        $query = $this->connect->prepare( 
            "DELETE FROM table_calon_mhs WHERE kode_calon_mhs = ?"
        );

        $query->execute([$kode]);

        $query->closeCursor();
    }
}