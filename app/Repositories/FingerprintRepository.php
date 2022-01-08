<?php namespace App\Repositories;

use App\Models\FingerprintData;

class FingerprintRepository
{
    protected $model;

    public function __construct(FingerprintData $fingerprintData)
    {
        $this->model = $fingerprintData;
    }

    public function update($id,$data){
		return $this->model->where('fingerprint_id', $id)->update($data);
	}

    public function getNotActiveFIngerprint(){
        $data = $this->model
                ->where('fingerprint_status', 'N')
                ->orderBy('fingerprint_key', 'ASC')
                ->first();

        return $data;
    }
}
