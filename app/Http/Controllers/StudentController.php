<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Log;

class StudentController extends Controller
{
    public function index()
    {
        
        $students = Student::with(['parent', 'courses'])->get();
        //dd($students);
        return view('index', compact('students'));
        
    
    }

    public function toggleStatus(Request $request)
    {
        
        try {
            $student = Student::find($request->id);
            if ($student) {
                $student->is_active = !$student->is_active;
                $student->save();

                return response()->json(['is_active' => $student->is_active]);
            } else {
                return response()->json(['error' => 'Student not found'], 404);
            }
        } catch (\Exception $e) {
            Log::error('Error in toggleStatus: ' . $e->getMessage());
            return response()->json(['error' => 'An error occurred'], 500);
        }
    }
}
