<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\FeedBack;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Api\BaseController as BaseController;

use App\Services\ImageUploadService;

use DB;
use Validator;

class FeedBackController extends BaseController
{
    protected $imageUploadService;

    public function __construct(ImageUploadService $imageUploadService)
    {
        $this->imageUploadService = $imageUploadService;
    }

    public function createFeedback(Request $request)
    {
        try {
            $input = $request->all();

            $extractToken = extractToken($request);
            if($extractToken)
            {
                $validator = Validator::make($input, [
                    'comment' => 'required|string',
                ]);
            
                if ($validator->fails()) {
                    return $this->sendError($validator->errors()->first());
                }

                $feedbackArr = FeedBack::create([
                    'user_id' => $extractToken['login_user_id'],
                    'comment_text' => $request->comment
                ]);

                $lastId = $feedbackArr->id;

                if($file = $request->file('comment_img'))
                {
                    $result = $this->imageUploadService->upload(FeedBack::class, 'comment_img', 'feedback', $file, $lastId);
                }
                    
                return $this->sendResponse($feedbackArr, 'Feedback created successfully.');
            }
            else
            {
                return $this->sendError('Invalid user id.');    
            }
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage());
        }
    }
}