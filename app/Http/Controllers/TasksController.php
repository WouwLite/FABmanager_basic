<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;
use Auth;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    protected $rules = [
        'name' 			=> 'required|max:100',
        'type'          => 'max:50', // Add required when it's implemented, please.
        'description'   => 'max:100',
        'ip'            => 'max:20',
        'patchnumber'   => 'max:100',
        'is_patched'    => 'numeric',
        'completed'    	=> 'numeric',

    ];

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        return view('tasks.index', [
            'tasks'           => Task::orderBy('created_at', 'desc')->where('user_id', $user->id)->get(),
            'tasksInComplete' => Task::orderBy('created_at', 'desc')->where('user_id', $user->id)->where('completed', '0')->get(),
            'tasksComplete'   => Task::orderBy('created_at', 'desc')->where('user_id', $user->id)->where('completed', '1')->get(),
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_all()
    {
        $user = Auth::user();

        return view('tasks.filtered', [
            'tasks' => Task::orderBy('created_at', 'desc')->where('user_id', $user->id)->get(),
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_incomplete()
    {
        $user = Auth::user();

        return view('tasks.filtered', [
            'tasks' => Task::orderBy('created_at', 'desc')->where('user_id', $user->id)->where('completed', '0')->get(),
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_complete()
    {
        $user = Auth::user();

        return view('tasks.filtered', [
            'tasks' => Task::orderBy('created_at', 'desc')->where('user_id', $user->id)->where('completed', '1')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->rules);
        $user = Auth::user();
        $task = $request->all();
        $task['user_id'] = $user->id;
        Task::create($task);

        return redirect('/tasks-incomplete')->with('success', 'Wooho! Het is gelukt! We hebben een nieuw apparaat toegevoegd!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::findOrFail($id);

        return view('tasks.edit')->withTask($task);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Task $task, Request $request, $id)
    {
        $this->validate($request, $this->rules);

        $task = Task::findOrFail($id);
        $task->name = $request->input('name'); // Ruimte waar het product zich bevind (jaja, de naam is onlogisch)
//        $task->type = $request->input('type'); // Het type product (VOS / VIOS / Telefonie / Etc)
        $task->description = $request->input('description'); // Het MAC adres van het product
//        $task->ip = $request->input('ip'); // Het (vooraf bedachte) IP adres van het product
        $task->patchnumber = $request->input('patchnumber'); // Het patchnummer van het product
//        $task->patched = $request->input('is_patched'); // Of het product is gepatcht (nieuw)
        $task->completed = $request->input('completed'); // Of het product is verwerkt
        $task->save();

        return redirect('/tasks-incomplete')->with('success', 'Aangepast');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Task::findOrFail($id)->delete();

        return redirect('/tasks-incomplete')->with('success', 'Zo, opgeruimd staat netjes! Die is weg.');
    }
}
