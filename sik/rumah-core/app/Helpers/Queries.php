<?php

namespace App\Helpers;

use App\Models\FieldTrip;
use App\Models\Innovation;
use App\Models\InnovationTopic;
use App\Models\InnovationTopicDetail;
use App\Models\ReplicationTopicDetail;
use App\Models\ReplicationTopic;
use App\Models\Training;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class Queries
{
    public static function innovationList($pagination = 5, $search = "", $is_replikasi = "")
    {
        $innovation_list = Innovation::whereNotNull('innovations.id')
            ->published()
            ->with(['creator_id', 'updater_id'])
            ->orderBy('innovations.year_start', 'desc')
            ->orderBy('innovations.id', 'desc');

        if (isset($search['category']) and $search['category'] != "") {
            $innovation_list->where('category_id', '=',  $search['category']);
        }

        if (isset($search['city']) and $search['city'] != "") {
            $innovation_list->where('city_id', '=',  $search['city']);
        }

        if (isset($search['title']) and $search['title'] != "") {
            $innovation_list->where('title', 'like', '%' . $search['title'] . '%');
        }

        if (isset($search['year_start']) and $search['year_start'] != "") {
            $innovation_list->where('year_start', 'like', '%' . $search['year_start'] . '%');
        }

        if ($is_replikasi == '1') {
            $innovation_list->join('sustainability_statuses', 'sustainability_statuses.id', '=', 'innovations.sustainability_status_id')
                ->where('sustainability_statuses.is_replikasi', '=', '1');
        }

        return $innovation_list->paginate($pagination, ['innovations.*']);
    }

    public static function showInnovation($id, $is_replikasi = "")
    {
        $innovation = Innovation::whereNotNull('innovations.id')
            ->published()
            ->with(['creator_id', 'updater_id'])
            ->select(['innovations.*']);

        if ($is_replikasi == '1') {
            $innovation->join('sustainability_statuses', 'sustainability_statuses.id', '=', 'innovations.sustainability_status_id')
                ->where('sustainability_statuses.is_replikasi', '=', '1');
        }

        return $innovation->find($id);
    }

    public static function replicationTopicListByInnovation($pagination = 5, $innovation_id)
    {
        $repTopic = ReplicationTopic::where("innovation_id", '=', $innovation_id)
            ->whereHas('innovation', function (Builder $query) {
                $query->published();
            })
            ->orderBy('created_at', 'desc')
            ->orderBy('replication_topics.id', 'desc');

        $select = [
            'replication_topics.*',
            DB::raw("date_format(last_post_at, '%d-%m-%Y %H:%i:%s') as last_post_time"),
            // "date_format(last_post_at, '%d-%m-%Y %H:%i:%s') as last_post_time",
            // 'sender.name as sender_name',
            // 'lastpostuser.name as lastpostuser_name',
        ];

        return $repTopic->paginate($pagination, $select);
    }

    public static function replicationTopicById($topic_id)
    {
        $repTopic = ReplicationTopic::whereNotNull('id')
            ->whereHas('innovation', function ($query) {
                $query->published();
            })
            ->orderBy('created_at', 'desc');

        $select = [
            'replication_topics.*',
            DB::raw("date_format(last_post_at, '%d-%m-%Y %H:%i:%s') as last_post_time"),
            // "date_format(last_post_at, '%d-%m-%Y %H:%i:%s') as last_post_time",
            // 'sender.name as sender_name',
            // 'sender.role as sender_role',
            // 'sender.photo as sender_photo',
            // 'lastpostuser.name as lastpostuser_name',
        ];

        return $repTopic->select($select)->find($topic_id);
    }

    public static function replicationTopicDetailList($pagination = 5, $topic_id)
    {
        $repTopic = ReplicationTopicDetail::where("topic_id", $topic_id)
            ->orderBy('created_at', 'asc');

        $select = [
            'replication_topic_details.*',
            DB::raw("date_format(replication_topic_details.created_at, '%d-%m-%Y %H:%i:%s') as created_time"),
            // 'sender.name as sender_name',
            // "date_format(last_post_at, '%d-%m-%Y %H:%i:%s') as last_post_time",
            // 'lastpostuser.name as lastpostuser_name',
        ];

        return $repTopic->paginate($pagination, $select);
    }

    public static function TrainingList($pagination = 5)
    {
        $select = [
            'trainings.*',
            DB::raw("date_format(created_at, '%d-%m-%Y') as created_time"),
        ];

        return Training::orderBy('created_at', 'desc')
            ->orderBy('id', 'desc')
            ->paginate($pagination, $select);
    }

    public static function FieldTripList($pagination = 5, $kunjungan_id = "")
    {
        $fieldTrips = FieldTrip::whereNotNull("field_trips.id")
            ->orderBy('created_at', 'desc')
            ->orderBy('id', 'desc');

        $select = [
            'field_trips.*',
            // 'innovation.id as innovation_id',
            // 'innovation.title as innovation_title',
            // 'innovation.innovator_name',
            // DB::raw("date_format(created_at, '%d-%m-%Y') as created_time"),
        ];

        if ($kunjungan_id != "" and $pagination == "") {
            return $fieldTrips->select($select)->find($kunjungan_id);
        } else {
            return $fieldTrips->paginate($pagination, $select);
        }
    }

    public static function innovationTopicList($pagination = 5)
    {
        $repTopic = InnovationTopic::whereNotNull("innovation_topics.id")
            ->orderBy('created_at', 'desc')
            ->orderBy('innovation_topics.id', 'desc');

        $select = [
            'innovation_topics.*',
            DB::raw("date_format(innovation_topics.last_post_at, '%d-%m-%Y %H:%i:%s') as last_post_time"),
            // "date_format(last_post_at, '%d-%m-%Y %H:%i:%s') as last_post_time",
            // 'sender.name as sender_name',
            // 'lastpostuser.name as lastpostuser_name',
        ];

        return $repTopic->paginate($pagination, $select);
    }

    public static function innovationTopicDetailList($pagination = 5, $topic_id)
    {
        $repTopic = InnovationTopicDetail::where("topic_id", $topic_id)
            ->orderBy('created_at', 'asc');

        $select = [
            'innovation_topic_details.*',
            DB::raw("date_format(innovation_topic_details.created_at, '%d-%m-%Y %H:%i:%s') as created_time"),
            // 'sender.name as sender_name',
            // "date_format(last_post_at, '%d-%m-%Y %H:%i:%s') as last_post_time",
            // 'lastpostuser.name as lastpostuser_name',
        ];

        return $repTopic->paginate($pagination, $select);
    }
}
