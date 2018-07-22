<?php

class Client{
    private $clientID;
    private $clientName;
    private $clientCaption;
    private $clientCaseStudyBrief;
    private $clientCaseStudy, $result, $quote, $testimony;
    private $portfolioThumbnail = array();
    private $altDescription = array();
    private $clientCompositonViews = array();

    private $website;
    private $language_software = array();
    private $serviceProvided = array();
    private $clientMethods = array();
    private $project_type;


    function __construct($id)
    {
        $client = getPage($id);
        $this->setClientName($client['name']);
        $this->setClientCaseStudy($client['case-study']);
        $this->setClientCaseStudyBrief($client['brief']);
        $this->setClientsMethods($client['methods']);
        $this->setClientsMethods($client["methods"]);
        $this->setClientCompositonViews($client["small_views"]);
    }

    /**
     * function setClientName is passed one variable @param $clientName
     *
     *
     */
    private function setClientName($clientName)
    {
        $this->clientName = $clientName;
    }

    public function getClientName()
    {
        return $this->clientName;
    }

    private function setClientCaseStudy($clientCaseStudy)
    {
        $this->clientCaseStudy = $clientCaseStudy;
    }

    public function getClientCaseStudy()
    {
        return $this->clientCaseStudy;
    }

    private function setClientCaseStudyBrief($clientCaseStudyBrief)
    {
        $this->clientCaseStudyBrief = $clientCaseStudyBrief;
    }

    public function getClientCaseStudyBrief()
    {
        return $this->clientCaseStudyBrief;
    }

    private function setClientsMethods($clientMethods)
    {
        $methods = explode(".", $clientMethods);
        $this->clientMethods = $methods;
    }

    public function getClientsMethods()
    {
        return $this->clientMethods;
    }

    /**
     * @return array
     */
    public function getClientCompositonViews()
    {
        return $this->clientCompositonViews;
    }

    /**
     * @param array $clientCompositonViews
     */
    public function setClientCompositonViews($clientCompositonViews)
    {
        $views = explode(";", $clientCompositonViews);
        $this->clientCompositonViews = $views;
    }

}


?>