<?php

namespace Jobcerto\CustomResourceTable;

use Illuminate\Support\Collection;
use Laravel\Nova\ResourceTool;

class CustomResourceTable extends ResourceTool
{
    /**
     * Get the component name for the resource tool.
     *
     * @return string
     */
    public function component()
    {
        return 'custom-resource-table';
    }

    public function heading($heading)
    {
        return $this->withMeta(['panel' => $heading]);
    }

    /**
     * Get the displayable name of the resource tool.
     *
     * @return string
     */
    public function name()
    {
        return 'Detalhes';
    }

    public function headings(Collection $headings)
    {
        return $this->withMeta(['headings' => $headings]);
    }

    public function rows(Collection $rows)
    {
        return $this->withMeta(['rows' => $rows]);
    }

    public function actions(array $actions)
    {
        return $this->withMeta(['actions' => collect($actions)->map(function ($url, $icon) {
            return ['icon' => $icon, 'url' => $url];
        })->values()->all()]);
    }
}
