<?php

namespace Devpartners\AuditableLog;

use Laravel\Nova\ResourceTool;

class AuditableLog extends ResourceTool
{
    /**
     * Get the displayable name of the resource tool.
     *
     * @return string
     */
    public function name()
    {
        return 'Auditable Log';
    }

    /**
     * Get the component name for the resource tool.
     *
     * @return string
     */
    public function component()
    {
        return 'auditable-log';
    }
}
