<?php

namespace Modules\Tickets\Datatables;

use Illuminate\Support\Collection;
use Lock;

class TicketManager
{
    public function boot()
    {
        return [
            /*
             * Page Decoration Values
             */
            'page' => [
                'title' => '<i class="fa fa-fw fa-puzzle-piece"></i> Ticket Manager',
                'alert' => [
                    'class' => 'info',
                    'text' => '<i class="fa fa-info-circle"></i> The Tickets',
                ],
                'header' => [
                    [
                        /*
                        'btn-text' => 'Check for Updates',
                        'btn-link' => 'admin.tickets.update',
                        'btn-class' => 'btn btn-info btn-labeled',
                        'btn-icon' => 'fa fa-fw fa-refresh',
                        */
                    ],
                ],
            ],

            /*
             * Set up some table options, these will be passed back to the view
             */
            'options' => [
                'pagination' => false,
                'searching' => false,
                'ordering' => false,
                'sort_column' => 'order',
                'sort_order' => 'desc',
                'source' => null,
                'collection' => function () {
                    $model = 'Modules\Tickets\Models\Ticket';

                    return $model::all();
                },
            ],

            /*
             * Lists the tables columns
             */
            'columns' => [
                // 'Debug' => [
                //     'th' => 'Debug',
                //     'tr' => function ($model) {
                //         return \Debug::dump($model);
                //     },
                //     'width'     => '80%',
                // ],

                'ticket_number' => [
                    'th' => 'Number',
                    'tr' => function ($model) {
                        return array_get($model, 'ticket_number', null);
                    },
                    'orderable' => true,
                    'width' => '10%',
                ],

                'subject' => [
                    'th' => 'Subject',
                    'tr' => function ($model) {
                        return array_get($model, 'subject', null);
                    },
                    'orderable' => true,
                    'searchable' => true,
                    'width' => '45%',
                ],

                /*'alias' => [
                    'th' => 'Namespace',
                    'tr' => function ($model) {
                        return array_get($model, 'alias', null);
                    },
                    'orderable' => true,
                    'searchable' => true,
                    'width' => '10%',
                ],

                'author' => [
                    'th' => 'Author',
                    'tr' => function ($model) {
                        $authors = null;
                        if (empty(array_get($model, 'authors', null))) {
                            return $authors;
                        }

                        foreach (array_get($model, 'authors', null) as $author) {
                            $authors .= sprintf('%s<br />', $author->name);
                        }

                        return $authors;
                    },
                    'orderable' => true,
                    'searchable' => true,
                    'width' => '15%',
                ],

                'version' => [
                    'th' => 'Version',
                    'tr' => function ($model) {
                        return array_get($model, 'version', null);
                    },
                    'orderable' => true,
                    'searchable' => true,
                    'width' => '7%',
                ],

                'keywords' => [
                    'th' => 'Keywords',
                    'tr' => function ($model) {
                        $keywords = null;
                        if (empty(array_get($model, 'keywords', null))) {
                            return $keywords;
                        }

                        $tpl = '<span class="label label-default">%s</span>&nbsp;';
                        foreach (array_get($model, 'keywords', null) as $keyword) {
                            $keywords .= sprintf($tpl, $keyword);
                        }

                        return $keywords;
                    },
                    'width' => '25%',
                ],*/

                /*
                'active' => [
                    'th' => 'Active',
                    'tr' => function ($model) {
                        return array_get($model, 'is_active', null)
                            ? '<div class="label label-success">Active</div>'
                            : '<div class="label label-danger">Not Active</div>';
                    },
                    'width' => '7%',
                ],
                */

                'actions' => [
                    'th' => 'Actions',
                    'tr' => function ($model) {
                        $return = [];

                        //if (Lock::can('manage.read', 'auth_user')) {
                        $return[] = [
                            'btn-title' => 'View Ticket',
                            'btn-link' => route('admin.ticket.view', $model->id),
                            'btn-class' => 'btn btn-default btn-xs btn-labeled',
                            'btn-icon' => 'fa fa-file-text-o',
                        ];
                        //}

                        //if (Lock::can('manage.update', 'auth_user')) {
                        $return[] = [
                            'btn-title' => 'Edit',
                            'btn-link' => route('admin.ticket.edit', $model->id),
                            'btn-class' => 'btn btn-warning btn-xs btn-labeled',
                            'btn-icon' => 'fa fa-pencil',
                        ];
                        //}

                        return $return;
                    },
                ],
            ],
        ];
    }
}
