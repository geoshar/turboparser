<?php
include_once('turboParserMethods.php');
class turboParser {
    function __construct($input) {
        $job = $input->job;

        $job_output = (object)[
            'text' => ''
        ];

        if (!$job->text) {
            echo 'text field is empty';
        }else{
            $job_output->text = $job->text;
        }
        if(!$job->methods){
            echo 'methods field is empty';
        }
        $methods = new turboParserMethods();

        foreach ($job->methods as $method) {
            if(method_exists($methods, $method)){
                $job_output->text  = $methods->$method($job_output->text);
            }else{
                // no method available
            }
        }
        echo json_encode($job_output, true);
    }
}