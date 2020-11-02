<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\PescadorCreateRequest;
use App\Http\Requests\PescadorUpdateRequest;
use App\Repositories\PescadorRepository;
use App\Validators\PescadorValidator;

/**
 * Class PescadorsController.
 *
 * @package namespace App\Http\Controllers;
 */
class PescadorsController extends Controller
{
    /**
     * @var PescadorRepository
     */
    protected $repository;

    /**
     * @var PescadorValidator
     */
    protected $validator;

    /**
     * PescadorsController constructor.
     *
     * @param PescadorRepository $repository
     * @param PescadorValidator $validator
     */
    public function __construct(PescadorRepository $repository, PescadorValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $pescadors = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $pescadors,
            ]);
        }

        return view('pescadors.index', compact('pescadors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PescadorCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(PescadorCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $pescador = $this->repository->create($request->all());

            $response = [
                'message' => 'Pescador created.',
                'data'    => $pescador->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pescador = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $pescador,
            ]);
        }

        return view('pescadors.show', compact('pescador'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pescador = $this->repository->find($id);

        return view('pescadors.edit', compact('pescador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  PescadorUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(PescadorUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $pescador = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Pescador updated.',
                'data'    => $pescador->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'Pescador deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Pescador deleted.');
    }

}
