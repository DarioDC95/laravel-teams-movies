<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();

        return view('admin.movies.index', compact('movies'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = $this->validation($request->all());

        $form_data = $request->all();

        $newMovie = new Movie();
        $newMovie->title = $form_data['title'];
        $newMovie->original_title = $form_data['original_title'];
        $newMovie->nationality = $form_data['nationality'];
        $newMovie->release_date = $form_data['release_date'];
        $newMovie->vote = $form_data['vote'];
        $newMovie->cast = $form_data['cast'];
        $newMovie->cover_path = $form_data['cover_path'];


        $newMovie->fill($form_data);

        $newMovie->save();

        return redirect()->route('admin.movies.show', ['movie' => $newMovie->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        $item = [
            'item' => $movie
        ];

        return view('admin.movies.show', $item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();

        return redirect()->route('admin.movies.index');
    }

    private function validation($data){
        $validator = Validator::make($data, [
            'title'=> 'required|max:100',
            'original_title'=> 'max:100',
            'nationality'=> 'max:30',
            'release_date'=> 'required',
            'vote'=> 'required',
            'cast'=> 'required',
            'cover_path'=> 'required'
        ],[
            'title.required' => 'Devi inserire un titolo!',
            'title.max' => 'Il titolo deve avere massimo 100 caratteri!',
            'original_title.max' => 'Il titolo originale può avere massimo 100 caratteri!',
            'nationality.max' => 'La nazionalità può avere massimo 30 caratteri!',
            'release_date.required' => 'Devi inserire la data di rilascio!',
            'vote.required' => 'Devi inserire un voto per il film!',
            'cast.required' => 'Devi inserire il cast del film!',
            'cover_path.required' => 'Devi inserire un Url come immagine del film!',
            
        ])->validate();

        return $validator;
    }
}
