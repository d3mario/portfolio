<?php
include '../private/initalize.php';

class Client{
    private $clientID;
    private $clientName;
    private $clientCaption;
    private $clientCaseStudyBrief;
    private $clientCaseStudy, $result, $quote, $testimony;
    private $portfolioThumbnail = array();
    private $altDescription = array();
    private $clientSmallCompositonViews = array();
    private $clientLargeCompositonViews = array();

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
        $this->setSmallClientCompositonViews($client['small_views']);
        $this->setLargeClientCompositionViews($client['large_views']);

    }

    /**
     * function setClientName is passed one variable @param $clientName
     *
     *
     */
    private function setClientName(String $clientName)
    {
        $this->clientName = $clientName;
    }

    public function getClientName(): string
    {
        return $this->clientName;
    }

    private function setClientCaseStudy(String $clientCaseStudy)
    {
        $this->clientCaseStudy = $clientCaseStudy;
    }

    public function getClientCaseStudy() : string
    {
        return $this->clientCaseStudy;
    }

    private function setClientCaseStudyBrief(String $clientCaseStudyBrief)
    {
        $this->clientCaseStudyBrief = $clientCaseStudyBrief;
    }

    public function getClientCaseStudyBrief(): String
    {
        return $this->clientCaseStudyBrief;
    }

    private function setClientsMethods(string $clientMethods)
    {
        $methods = explode(".", $clientMethods);
        $this->clientMethods = $methods;
    }

    public function getClientsMethods(): array
    {
        return $this->clientMethods;
    }

    /**
     * @return array
     */
    public function getSmallClientCompositionViews():array
    {
        return $this->clientSmallCompositonViews;
    }

    /**
     * @param array $clientCompositonViews
     */
    private function setSmallClientCompositonViews(String $clientSmallCompositonViews)
    {
        $views = explode(";", $clientSmallCompositonViews);
        $this->clientSmallCompositonViews = $views;
    }
    /**
     * @param array $clientCompositonViews
     */
    private function setLargeClientCompositionViews(String $clientLargeCompositonViews)
    {
        $views = explode(";", $clientLargeCompositonViews);
        $this->clientLargeCompositonViews = $views;
    }

    public function getLargeClientCompositionViews(): array
    {
        return $this->clientLargeCompositonViews;
    }


}


?>