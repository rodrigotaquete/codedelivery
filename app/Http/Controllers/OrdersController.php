<?php

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Http\Requests;
use CodeDelivery\Http\Requests\AdminOrderRequest;
use CodeDelivery\Repositories\OrderRepository;
use CodeDelivery\Repositories\UserRepository;

class OrdersController extends Controller
{
    public function __construct(OrderRepository $repository, UserRepository $userRepository)
    {
        $this->repository = $repository;
        $this->userRepository = $userRepository;

        $this->statusDescription = ['Em andamento', 'Em processamento', 'Finalizado'];
    }

    public function getstatusDescription()
    {
        return $this->statusDescription;
    }

    public function index()
    {
        $orders = $this->repository->paginate(5);

        return view('admin.orders.index', compact('orders'));
    }

    public function update(AdminOrderRequest $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);

        return redirect()->route('admin.orders.index');
    }

    public function details($id)
    {
        $order = $this->repository->find($id);

        $status = $this->statusDescription[$order->status];

        return view('admin.orders.details', compact('order','status'));
    }

    public function status($id)
    {
        $order = $this->repository->find($id);

        return view('admin.orders.status', compact('order'));
    }

    public function deliveryman($id)
    {
        $order = $this->repository->find($id);
        $users = $this->userRepository->lists();
        $status = $this->statusDescription[$order->status];

        return view('admin.orders.deliveryman', compact('order', 'users', 'status'));
    }
}
