<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\site\Opportunitie;
use App\models\admin\Formation;
use App\models\admin\Hierarchies;

class OpportunitieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     private $opportunitie;

     public function __construct(Opportunitie $opportunitie){
         $this->opportunitie = $opportunitie;
     }

    public function index(Opportunitie $opportunitie)
    {
        $opportunities = $this->opportunitie->all();
        
        return view('site.vagas.vagas', compact('opportunities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $formations = Formation::pluck('name', 'idformation')->all();
        $hierarchys = Hierarchies::pluck('name', 'idhierarchy')->all();
        
        return view('site.vagas.cadastroVagas', compact('formations', 'hierarchys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Pega todos os dados vindos do formulário
        $dadosForm = $request->all();
        
        //Inseri os dados no banco
        $insert = $this->opportunitie->create($dadosForm);
        
        if($insert){
            return redirect()->route('cadastrar.index')->with(['message', 'Vaga criada com sucesso!']);;
        }else {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $opportunities = $this->opportunitie->find($id);
        
        return view('site.vagas.visualizarVaga', compact('opportunities'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $opportunities = Opportunitie::findOrFail($id);
        return view('site.editarVaga', compact('opportunities')); //Criar tela de edição ou usar a mesma de cadastro
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dataForm = $request->all();
        
        $opportunities = $this->opportunitie->find($id);
         
        $dataForm['active'] = (!isset($dataForm['active'])) ? 0 : 1;
        
        $update = $opportunities->update($dataForm);
        
        if($update){
            return redirect()->route('vagas.index')->with(['message', 'Vaga atualizada com sucesso!']);
        } else {
            return redirect()->route('vagas.edit', $id)->with(['erros', 'Falha ao editar']);
        }
         
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $opportunities = $this->opportunitie->find($id);
        
        $delete = $opportunities->delete();
        
        if($delete){
            return redirect()->route('vagas.index')->with(['message', 'Vaga excluída com sucesso!']);;
        } else {
            return redirect()->route('vagas.show', $id)->with(['erros', 'Não foi possível excluir a vaga!']);
        }
    }
}
