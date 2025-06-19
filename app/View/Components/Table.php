<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Table extends Component
{
    public string $id;
    public string $title;
    public string $route;
    public array $columns;
    public array $fields;
    public array $actions;

    /**
     * Create a new component instance.
     */
    public function __construct(string $id, string $title, string $route, array $columns, array $fields, array $actions = [])
    {
        $this->id = $id;
        $this->title = $title;
        $this->route = $route;
        $this->columns = $columns;
        $this->fields = $fields;
        $this->actions = $actions;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table');
    }
}
