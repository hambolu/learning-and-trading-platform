<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function showMessageForm()
    {
        $users = User::all();
        $user = User::find(Auth::id());
        $message = Message::all();
        return view('send-message', compact('users','user','message'));
    }
    public function sendMessage(Request $request)
    {
        $senderId = auth()->user()->id;
        $content = $request->input('content');
        $recipientIds = $request->input('recipient_ids');

        // If recipient_ids is not an array, convert it to an array
        if (!is_array($recipientIds)) {
            $recipientIds = [$recipientIds];
        }

        // Check if the recipient_ids contains the keyword 'all'
        if (in_array('all', $recipientIds)) {
            // Send message to all users
            $users = User::where('id', '!=', $senderId)->get();
            foreach ($users as $user) {
                $this->sendMessageToUser($senderId, $user->id, $content);
            }
        } else {
            // Send message to specific users
            foreach ($recipientIds as $recipientId) {
                $this->sendMessageToUser($senderId, $recipientId, $content);
            }
        }

        toastr()->success('Messages sent successfully!');
            return back();
        //return response()->json(['message' => 'Messages sent successfully']);
    }

    private function sendMessageToUser($senderId, $recipientId, $content)
    {
        $message = new Message();
        $message->sender_id = $senderId;
        $message->recipient_id = $recipientId;
        $message->content = $content;
        $message->save();
    }

    public function show($id)
    {
        $message = Message::find($id);
        if (!$message) {
            toastr()->error('Messages not found!');
            return back();
        }
        return view('show-message',compact('message'));
    }

    private function markAsRead(Request $request, Message $message)
    {
        $message->update(['read' => true]);
        return redirect()->back()->with('success', 'Message marked as read.');
    }
}
