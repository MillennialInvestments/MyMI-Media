<?php
namespace Modules\LivestreamAutomation;

use CodeIgniter\RESTful\ResourceController;

class LivestreamController extends ResourceController
{
    /** @var LiveStreamService */
    protected $service;

    public function __construct()
    {
        $this->service = service('liveStreamService');
    }

    /**
     * GET /scheduleWeekendStream
     */
    public function scheduleWeekendStream()
    {
        $this->service->scheduleWeekendStream();
        return $this->respond(['status' => 'stream scheduled']);
    }

    /**
     * GET /generateLiveStreamScript
     */
    public function generateLiveStreamScript($id)
    {
        $script = $this->service->generateScript((int) $id);
        return $this->respond(['script' => $script]);
    }

    /**
     * GET /streamOverlay/{segment}
     */
    public function streamOverlay($segment)
    {
        // Return basic HTML for OBS overlay
        return view('LivestreamAutomation\\Views\\overlay_' . $segment);
    }
}
