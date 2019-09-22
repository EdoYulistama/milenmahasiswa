<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // public $timestamps = false;
    protected $fillable = ['id','nama','npm','email','jurusan','status'];

    
    public function students()
    {
        $students = $this->all();
        return $students;
    }
    
    public function studentsaktif()
    {
        $students = $this->where('status', '=', 'aktif')->get();
        return $students;
    }

    public function studentscuti()
    {
        $students = $this->where('status', '=', 'cuti')->get();
        return $students;
    }

    public function studentsdo()
    {
        $students = $this->where('status', '=', 'do')->get();
        return $students;
    }

    public function student($student)
    {
        $students = $this->where('id', $student)->get();
        
        // $id = [];
        // $nama = [];
        // $npm = [];
        // $email = [];
        // $jurusan = [];

        foreach ($students as $student)
        {
            $id = $student->id;
            $nama = $student->nama;
            $npm = $student->npm;
            $email = $student->email;
            $jurusan = $student->jurusan;
        }

        $result = array(
            'id'=> ($id),
            'nama'=> ($nama),
            'npm'=> ($npm),
            'email'=> ($email),
            'jurusan'=> ($jurusan),
            
        );
        return $result;
    }

    public function _create($data)
    {
        // $data->validate([
        //     'nama'=>'required',
        //     // 'npm' => 'required|size:8',
        //     // 'email' => 'required',
        //     // 'jurusan' => 'required',
        // ]);
        return $this->create(
        [
            'nama' => $data['nama'],
            'npm' => $data['npm'],
            'email' => $data['email'],
            'jurusan' => $data['jurusan'],
            'status' => $data['status'],

        ]);
    }

    public function addstudents($data)
    {
        $this->_create($data);
        return redirect('/admin/dashboard')->with('status', 'Data Mahasiswa Berhasil di Tambahkan!');;
    }

    public function updatestudent($data)
    {
        $this->where('id', $data['id'])->update(
            [
                'nama' => $data['nama'],
                'npm' => $data['npm'],
                'email' => $data['email'],
                'jurusan' => $data['jurusan'],
                'status' => $data['status']
            ]);
        return redirect('/admin/dashboard')->with('status', 'Data Mahasiswa Berhasil di Ubah!');;

    }

    public function studentsdelete($id)
    {
        $students = $this->where('id', $id)->delete();
        return redirect('/admin/dashboard')->with('status', 'Data Mahasiswa Berhasil di Hapus!');

    }
}
