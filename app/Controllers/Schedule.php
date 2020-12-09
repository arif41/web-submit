<?php

namespace App\Controllers;

class Schedule extends BaseController
{
	public function index()
	{
		return view('index');
	}
	public function plan()
	{
		return view('plan');
	}
	public function save()
	{
		$model = new \App\Models\ScheduleModel();
		$model->insert([
			'nama' => $this->request->getVar('nama'),
			'tanggal' => $this->request->getVar('tanggal'),
			'lokasi' => $this->request->getVar('lokasi'),
			'kepentingan' => $this->request->getVar('kepentingan'),
			'divisi' => $this->request->getVar('divisi'),
		]);
		return redirect()->to('/schedule/list');
	}
	public function list()
	{
		$model = new \App\Models\ScheduleModel();
		$schedule = $model->findAll();
		return view('list', [
			'schedule' => $schedule,
		]);
	}
	public function edit($id)
	{
		$model = new \App\Models\ScheduleModel();
		$schedule = $model->find($id);
		return view('edit', [
			'schedule' => $schedule,
		]);
	}
	public function update()
	{
		$model = new \App\Models\ScheduleModel();
		$model->find($this->request->getVar('id'))->update([
			'nama' => $this->request->getVar('nama'),
			'tanggal' => $this->request->getVar('tanggal'),
			'lokasi' => $this->request->getVar('lokasi'),
			'kepentingan' => $this->request->getVar('kepentingan'),
			'divisi' => $this->request->getVar('divisi'),
		]);
		return redirect()->to('/schedule/list');
	}
	//--------------------------------------------------------------------

}
