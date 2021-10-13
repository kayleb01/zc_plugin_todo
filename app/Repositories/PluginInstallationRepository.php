<?php

namespace App\Repositories;

use App\Repositories\HTTP\HTTPRepository;

class PluginInstallationRepository extends HTTPRepository
{
    public function installPluginOnWorkspace($data)
    {
        return $this->model::withHeaders(['Authorization' => 'Bearer ' . $data['token']])->get($this->url . '/organizations/' . $data['organisation_id']. '/plugins')->json();
    }

    public function uninstallPluginFromWorkspace($data)
    {
        return $this->model::withHeaders(['Authorization' => 'Bearer ' . $data['token']])->delete($this->url . '/organizations/' . $data['organisation_id']. '/plugins'. )->json();
    }
}
