<?php

namespace Filament\GlobalSearch\Actions;

use Filament\GlobalSearch\Actions\Concerns\CanEmitEvent;
use Filament\Support\Actions\BaseAction;
use Filament\Support\Actions\Concerns\CanBeOutlined;
use Filament\Support\Actions\Concerns\CanOpenUrl;

class Action extends BaseAction
{
    use CanBeOutlined;
    use CanEmitEvent;
    use CanOpenUrl;

    protected string $view = 'filament::global-search.actions.link-action';

    protected string $viewIdentifier = 'action';

    public function button(): static
    {
        $this->view('filament::global-search.actions.button-action');

        return $this;
    }

    public function iconButton(): static
    {
        $this->view('filament::global-search.actions.icon-button-action');

        return $this;
    }

    public function link(): static
    {
        $this->view('filament::global-search.actions.link-action');

        return $this;
    }
}
