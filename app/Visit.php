<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    /**
     * Save a visit on site
     * @param  String $ip         Localization of the visitor
     * @param  String $user_agent General information of the visitor
     * @return [type]             [description]
     */
    public function saveVisit($ip, $user_agent, $request)
    {
        $browser = explode(' ', $user_agent);
        $this->browser = isset($browser[10]) ? $browser[10] : '';
        $os = explode('(', $user_agent);
        $os = isset($os[1]) ? $os[1] : '';
        $os = explode(';', $os);
        $this->os = isset($os[0]) ? $os[0] : '';
        $this->ip = $ip;
        $this->user_agent = $user_agent;
        if (!$this->isSameVisit($request)) {
            $this->save();
        }
    }

    /**
     * Returns if is the same visit
     * @return boolean [description]
     */
    private function isSameVisit($request)
    {
        $time = $request->session()->get('time');
        $fifteen_minutes = date('Y-m-d H:');
        $fifteen_minutes .= round(date('i') / 15);
        $return = $time == $fifteen_minutes;
        $time = $request->session()->put('time', $fifteen_minutes);
        return $return;
    }
}
