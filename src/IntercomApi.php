<?php

namespace Darkin1\Intercom;

use Intercom\IntercomClient;

/**
 * Class IntercomApi.
 */
class IntercomApi
{
    /**
     * @var \Intercom\IntercomClient
     */
    protected $intercom;

    /**
     * @param $intercom
     */
    public function __construct(IntercomClient $intercom)
    {
        $this->intercom = $intercom;
    }

    /**
     * @return \Intercom\IntercomUsers
     */
    public function users()
    {
        return $this->intercom->users;
    }

    /**
     * @return \Intercom\IntercomEvents
     */
    public function events()
    {
        return $this->intercom->events;
    }

    /**
     * @return \Intercom\IntercomCompanies
     */
    public function companies()
    {
        return $this->intercom->companies;
    }

    /**
     * @return \Intercom\IntercomMessages
     */
    public function messages()
    {
        return $this->intercom->messages;
    }

    /**
     * @return \Intercom\IntercomConversations
     */
    public function conversations()
    {
        return $this->intercom->conversations;
    }

    /**
     * @return \Intercom\IntercomLeads
     */
    public function leads()
    {
        return $this->intercom->leads;
    }

    /**
     * @return \Intercom\IntercomAdmins
     */
    public function admins()
    {
        return $this->intercom->admins;
    }

    /**
     * @return \Intercom\IntercomTags
     */
    public function tags()
    {
        return $this->intercom->tags;
    }

    /**
     * @return \Intercom\IntercomSegments
     */
    public function segments()
    {
        return $this->intercom->segments;
    }

    /**
     * @return \Intercom\IntercomCounts
     */
    public function counts()
    {
        return $this->intercom->counts;
    }

    /**
     * @return \Intercom\IntercomBulk
     */
    public function bulk()
    {
        return $this->intercom->bulk;
    }

    /**
     * @return \Intercom\IntercomNotes
     */
    public function notes()
    {
        return $this->intercom->notes;
    }

    /**
     * @return \Intercom\IntercomVisitors
     */
    public function visitors()
    {
        return $this->intercom->visitors;
    }
}
