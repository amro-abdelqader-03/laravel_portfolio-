<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::paginate(15);
        return view('portfolio.skills', compact('skills'));
    }

    public function create()
    {
        return view('skills.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'level' => 'required|string',
            'user_id' => 'required'
        ]);
        Skill::create($validatedData);

        return redirect()->route('skills')->with('success', 'Skill created successfully.');
    }
    public function edit(Skill $skill)
    {
        return view('skills.edit', compact('skill'));
    }
    public function update(Request $request, Skill $skill)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'level' => 'required|string',
        ]);

        $skill->update($validatedData);

        return redirect()->route('skills')->with('success', 'Skill updated successfully.');
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();

        return redirect()->route('skills')->with('success', 'Skill deleted successfully.');
    }


}
