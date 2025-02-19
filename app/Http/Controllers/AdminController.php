<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index() {
        $datos=DB::select(" select * from producto ");
        return view('admin.index')->with("datos", $datos);

    }

    public function create(Request $request){
        try{
            $sql=DB::insert("insert into producto(id_producto,image,nombre,precio,cantidad) values(?,?,?,?,?) ",[
                $request->txtcodigo,
                $request->txtimage,
                $request->txtnombre,
                $request->txtprecio,
                $request->txtcantidad
            ]);
        } catch(\Throwable $th){
            $sql = 0;
        }

        if($sql == true){
            return back()->with("correcto", "Producto registrado correctamente");
        }else{
            return back()->with("incorrecto", "Error al registrar");
        }

    }

    public function update(Request $request){
        try{
            $sql=DB::update("Update producto set image=?, nombre=?, precio=?, cantidad=? where id_producto=?", [
                $request->txtimage,
                $request->txtnombre,
                $request->txtprecio,
                $request->txtcantidad,
                $request->txtcodigo
            ]);
            if($sql == 0){
                $sql = 1;
            }
        } catch(\Throwable $th){
            $sql=0;
        }

        if($sql == true){
            return back()->with("correcto", "Producto modificado correctamente");
        }else{
            return back()->with("incorrecto", "Error al modificar");
        }

    }

    public function delete($id){
        try{
            $sql=DB::delete(" delete from producto where id_producto=$id");
        } catch(\Throwable $th){
            $sql = 0;
        }

        if($sql == true){
            return back()->with("correcto", "Producto Eliminado correctamente");
        }else{
            return back()->with("incorrecto", "Error al Eliminado");
        }
    }


}
