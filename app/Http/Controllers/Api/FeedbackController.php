<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFeedbackRequest;
use App\Http\Requests\UpdateFeedbackRequest;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function index()
    {
        return Feedback::all();
    }

    public function store(StoreFeedbackRequest $request)
    {
        $validated = $request->validated();

        $files = [];
        if ($request->hasFile('attachments')) {
            foreach ($request->file('attachments') as $file) {
                $files[] = $file->store('uploads/feedbacks', 'public');
            }
        }

        $feedback = Feedback::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'subject' => $validated['subject'] ?? '',
            'details' => $validated['details'] ?? '',
            'attachments' => $files,
        ]);

        return response()->json(['message' => 'Created', 'data' => $feedback], 201);
    }

    public function show($id)
    {
        $feedback = Feedback::findOrFail($id);
        return $feedback;
    }

    public function update(UpdateFeedbackRequest $request, $id)
    {
        $feedback = Feedback::findOrFail($id);

        $feedback->update($request->validated());

        return response()->json(['message' => 'Updated', 'data' => $feedback]);
    }

    public function destroy($id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->delete();

        return response()->json(['message' => 'Deleted']);
    }
}
