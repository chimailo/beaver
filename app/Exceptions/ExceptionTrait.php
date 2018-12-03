<?php

namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

trait ExceptionTrait
{
	public function apiException($request, $ex) {

        if ($this->isModel($ex)) {

            return $this->ModelResponse($ex);
        }
       
       if ($this->isHttp($ex)) {

            return $this->HttpResponse($ex);
        }

        return parent::render($request, $ex);

	}

	protected function isModel($e) {

		return $e instanceof ModelNotFoundException;
	}

	protected function isHttp($e) {

		return $e instanceof NotFoundHttpException;
	}

	protected function ModelResponse($e) {

		return response()->json([

                'errors' => 'Model Not Found'

            ], Response::HTTP_NOT_FOUND);
	}

	protected function HttpResponse($e) {
		
		return response()->json([

                'errors' => 'url does not exist'

            ], Response::HTTP_NOT_FOUND);
	}

}