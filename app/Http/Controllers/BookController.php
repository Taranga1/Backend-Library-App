<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

use App\Models\Issue;
use App\Models\Student;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view("books.create");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $student= Student::all();
        $issue = Issue::all();
        $books = Books::paginate(2);
        return view("books.create",compact("books","student","issue"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->image;
        $new_image = time() . $image->getClientOriginalName();
        $data = $request->validate([
            "name" => "required",
        ]);
        $image->move("images1",$new_image);
        $books = new Books();
        $books->name = $request->name;
        $books->author = $request->author;
        $books->edition = $request->edition;
        $books->publication = $request->publication;
        $books->cost = $request->cost;
        $books->page = $request->page;
        $books->code = $request->code;
        $books->quantity = $request->quantity;
        $books->catagory = $request->catagory;
        $books->image = "images1/" . $new_image;
        $books->save();
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Books::all();
        return view("bookdetails.create");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $books = Books::find($id);
        return view("bookdetails.edit",compact("books"));
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
        $data = $request->validate([
            "name" => "required"
        ]);

        $books = Books::find($id);
        $books->name = $request->name;
        $books->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $books = Books::find($id);
        $books->delete();
        return redirect()->back();
    }
}
