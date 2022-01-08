<?php namespace App\Services\AppServices\Employee;

use App\Repositories\FingerprintRepository;
use Illuminate\Support\Facades\Http;

class FingerprintService
{
    protected $fingerprintRepository;

    public function __construct(FingerprintRepository $fingerprintRepository)
    {
        $this->fingerprintRepository = $fingerprintRepository;
    }

    public function getFingerprint(){
        $data =  $this->fingerprintRepository->getNotActiveFIngerprint();
        return $data;
    }

    public function getLattepandaFingeprintStatus($id){
        $response = Http::get($this->baseUrl."asensing/register.php", ['id' => $id]);
        return $response;
    }
}
