<?php

namespace App\Http\Controllers\Api;

use App\Job;
use App\JobsTags;
use App\Tags;
use Illuminate\Support\Facades\DB;

class JobsController extends ApiController
{
    /*
     * API for jobs detail
     * @param id interger
     * */
    public function jobsDetail($alias)
    {
        if ($alias != null) {
            $jobInfor = Job::select(
                'id',
                'name',
                'alias',
                'introduce',
                'description',
                'images',
                'views',
                DB::raw("DATE_FORMAT(updated_at, '%M %w, %Y') as date_created"))
                ->where('del_flg', 0)->where('alias', $alias)->get();

            $jobOther = Job::select(
                'id',
                'name',
                'images',
                'alias',
                DB::raw("DATE_FORMAT(updated_at, '%M %w, %Y') as date_created"))
                ->where('del_flg', 0)->where('alias', '!=', $alias)->orderBy('updated_at', 'DESC')->get();

            $jobTagInfor = JobsTags::select([
                'job_id',
                'tag_id'
            ])->where('job_id', $jobInfor->pluck('id'))->get();

            $listTags = Tags::select([
                'id', 'name', 'alias',
            ])->get();
        }

        return response()->json([
            'jobs' => $jobInfor,
            'jobsOther' => $jobOther,
            'jobsTags' => $jobTagInfor,
            'listTags' => $listTags
        ]);
    }

    /*
     * API for all Jobs
     * */
    public function jobsList() {
        $jobInfor = Job::select(
            "id",
            "name",
            "alias",
            "introduce",
            "images",
            "views",
            DB::raw("DATE_FORMAT(updated_at, '%M %w, %Y') as date_created"))
            ->orderBy('updated_at', 'DESC')
            ->where('del_flg', 0)->paginate(3);

        return response()->json([
            'jobs' => $jobInfor
        ]);
    }

    public function jobsTags($tagAlias) {
        if($tagAlias != null) {
            $jobInfor = \App\Job::select(
                "dtb_jobs.job_id",
                "dtb_jobs.job_name",
                "dtb_jobs.job_alias",
                "dtb_jobs.job_introduce",
                "dtb_jobs.job_images",
                "dtb_jobs.job_views")
                ->leftJoin('dtb_jobs_tags AS jt', 'dtb_jobs.job_id', '=', 'jt.job_id')
                ->leftJoin('dtb_tags AS t', 'jt.tag_id', '=', 't.tag_id')
                ->where('t.tag_alias', $tagAlias)->paginate(10);
        }

        return response()->json([
            'jobs' => $jobInfor
        ]);
    }
}
