<?php
namespace Azine\GeoBlockingBundle\Test\Adapter;

use Azine\GeoBlockingBundle\Adapter\MaxmindLookupAdapter;


class MaxmindLookupAdapterTest extends \PHPUnit_Framework_TestCase{

	/**
 	 * @expectedException \InvalidArgumentException
	 */
	public function testGetCountryMaxmindGeoIPBundleNotInstalled(){
		$container = $this->getMockBuilder("Symfony\Component\DependencyInjection\ContainerInterface")->getMock();
		$container->expects($this->once())->method("hasParameter")->with('maxmind_geoip_data_file_path')->will($this->returnValue(false));
		$adapter = new MaxmindLookupAdapter($container);
	}

//     public function testGetCountryMaxmindGeoIPBundleInstalled(){

//     	$container = $this->getMockBuilder("Symfony\Component\DependencyInjection\Container")->disableOriginalConstructor()->getMockForAbstractClass();
//     	$container->
//     	$adapter = new MaxmindLookupAdapter($container);

//     	$country = $adapter->getCountry("8.8.8.8");

//     	$this->assertEquals("US", $country);
//     }
}