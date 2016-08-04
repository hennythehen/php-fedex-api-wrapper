<?php
namespace FedEx\Utility\Cli\GenerateCode\Command;

use FedEx\Utility\CodeGenerator,
    Symfony\Component\Console\Input\InputArgument,
    Symfony\Component\Console\Input\InputOption,
    Symfony\Component\Console,
    Symfony\Component\Console\Input\InputInterface,
    Symfony\Component\Console\Output\OutputInterface;

/**
 * Generate Command for Generate Code CLI Application
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Utilities
 */
class GenerateCode extends Console\Command\Command
{

    const COMPLEX_TYPE_PATH = '/ComplexType';
    const SIMPLE_TYPE_PATH = '/SimpleType';
    const BASE_NAMESPACE = 'FedEx';

    protected $srcDir;

    /**
     * Configure implementation
     */
    protected function configure()
    {
        $description = "Parses the .wsdl files and generates Request, ComplexType, and SimpleType classes.";
        
        $this
            ->setName('generate')
            ->setDescription($description)
            ->setHelp(PHP_EOL . $description . PHP_EOL);
    }

    /**
     * @param $subpackageName
     * @param $wsdlPath
     */
    protected function buildToPath($subpackageName, $wsdlPath)
    {
        $wsdlPath = $this->srcDir . $wsdlPath;

        $subpackagePath = '/' . str_replace(" ", "", $subpackageName);

        $subpackageNamespace = '\\' . str_replace(" ", "", $subpackageName);


        if (!file_exists($this->srcDir . $subpackagePath)) {
            mkdir($this->srcDir . $subpackagePath);
        }

        //generate Request class
        $pathToRequestClassFile = $this->srcDir . $subpackagePath . '/'. str_replace(" ", "", $subpackageName) . 'Request.php';
        $generateRequestClassFile = new CodeGenerator\GenerateRequestClass($pathToRequestClassFile, $wsdlPath, self::BASE_NAMESPACE . $subpackageNamespace, $subpackageName);
        $generateRequestClassFile->run();


        //generate SimpleType classes
        $exportPath = $this->srcDir . $subpackagePath . self::SIMPLE_TYPE_PATH;
        $generateSimpleTypes = new CodeGenerator\GenerateSimpleTypeClasses($exportPath, $wsdlPath, self::BASE_NAMESPACE . $subpackageNamespace, $subpackageName);
        $generateSimpleTypes->run();

        //generate ComplexType classes
        $exportPath = $this->srcDir . $subpackagePath . self::COMPLEX_TYPE_PATH;
        $generateComplexTypes = new CodeGenerator\GenerateComplexTypeClasses($exportPath, $wsdlPath, self::BASE_NAMESPACE . $subpackageNamespace, $subpackageName);
        $generateComplexTypes->run();
    }

    /**
     * Executes the command
     * 
     * @param \Symfony\Component\Console\Input\InputInterface $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     * @throws \Exception
     */
    protected function execute(InputInterface $input, OutputInterface $output) {

        if (!isset($_SERVER['PWD'])) {
            throw new \Exception('Cannot determine current working directory.  Make sure you run this script from command line.');
        }
        
        $this->srcDir = realpath(dirname($_SERVER['PWD'] . '/' . $_SERVER['PHP_SELF']) . '/../src/FedEx');
        
        if (!is_writable($this->srcDir)) {
            throw new \Exception('Cannot write to directory: ' . $this->srcDir);
        }
        
        $this->buildToPath('Rate Service', '/_wsdl/RateService_v18.wsdl');
        $this->buildToPath('Country Service', '/_wsdl/CountryService_v4.wsdl');
        $this->buildToPath('Locations Service', '/_wsdl/LocationsService_v3.wsdl');
        $this->buildToPath('Pickup Service', '/_wsdl/PickupService_v11.wsdl');
        $this->buildToPath('Ship Service', '/_wsdl/ShipService_v17.wsdl');
        $this->buildToPath('Track Service', '/_wsdl/TrackService_v10.wsdl');
        $this->buildToPath('Upload Document Service', '/_wsdl/UploadDocumentService_v8.wsdl');
        $this->buildToPath('Validation Availability And Commitment Service', '/_wsdl/ValidationAvailabilityAndCommitmentService_v4.wsdl');
    }
}