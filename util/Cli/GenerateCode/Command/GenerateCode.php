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
        //RateRequest
        $wsdlPath = $this->srcDir . $wsdlPath;

        //generate Request class
        $pathToRequestClassFile = $this->srcDir . '/'. str_replace(" ", "", $subpackageName) . 'Request.php';
        $generateRequestClassFile = new CodeGenerator\GenerateRequestClass($pathToRequestClassFile, $wsdlPath, self::BASE_NAMESPACE, $subpackageName);
        $generateRequestClassFile->run();

        //generate SimpleType classes
        $exportPath = $this->srcDir . self::SIMPLE_TYPE_PATH;
        $generateSimpleTypes = new CodeGenerator\GenerateSimpleTypeClasses($exportPath, $wsdlPath, self::BASE_NAMESPACE, $subpackageName);
        $generateSimpleTypes->run();

        //generate ComplexType classes
        $exportPath = $this->srcDir . self::COMPLEX_TYPE_PATH;
        $generateComplexTypes = new CodeGenerator\GenerateComplexTypeClasses($exportPath, $wsdlPath, self::BASE_NAMESPACE, $subpackageName);
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
        $this->buildToPath('Package Movement Information Service','/_wsdl/PackageMovementInformationService_v5.wsdl');
        $this->buildToPath('Track Service', '/_wsdl/TrackService_v5.wsdl');
        $this->buildToPath('Address Validation Service', '/_wsdl/AddressValidationService_v2.wsdl');
        $this->buildToPath('Locator Service', '/_wsdl/LocatorService_v2.wsdl');
        $this->buildToPath('Ship Service', '/_wsdl/ShipService_v12.wsdl');
        $this->buildToPath('Courier Dispatch Service', '/_wsdl/CourierDispatchService_v3.wsdl');
        $this->buildToPath('Close Service', '/_wsdl/CloseService_v2.wsdl');
        $this->buildToPath('Return Tag Service', '/_wsdl/ReturnTagService_v1.wsdl');
        $this->buildToPath('Upload Document Service', '/_wsdl/UploadDocumentService_v1.wsdl');
        $this->buildToPath('Pickup Service', '/_wsdl/PickupService_v3.wsdl');

    }
}