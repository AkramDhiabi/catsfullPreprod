<?php

namespace Drupal\Tests\image_scale_and_crop_without_upscale\Functional;

use Drupal\FunctionalTests\Image\ToolkitTestBase;

/**
 * Tests that the image effects pass parameters to the toolkit correctly.
 *
 * @group image
 */
class ImageEffectsTest extends ToolkitTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = [
    'image_scale_and_crop_without_upscale',
  ];

  /**
   * The image effect manager.
   *
   * @var \Drupal\image\ImageEffectManager
   */
  protected $manager;

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();
    $this->manager = $this->container->get('plugin.manager.image.effect');
  }

  /**
   * Test the image_resize_effect() function.
   *
   * Not using a data provider for test data since it's so much slower.
   */
  public function testScaleAndCropWithoutUpscaleEffect() {
    // The source image width and height is always 200x200.
    $testData = [
      // Source width < target width, source height < target height, same A/R.
      // Target should be equal to source.
      [400, 400, 0, 0, 200, 200],
      // Source width < target width, source height < target height, diff A/R.
      // Target should be downscaled, maintaining A/R.
      [400, 300, 0, 25, 200, 150],
      // Source width < target width, source height = target height.
      // Target should be downscaled, maintaining A/R.
      [300, 200, 0, 33.5, 200, 133],
      // Source width < target width, source height > target height.
      // Target should be downscaled, maintaining A/R.
      [300, 100, 0, 66.5, 200, 67],
      // Source width > target width, source height > target height, same A/R.
      // Target should be downscaled, maintaining A/R.
      [100, 100, 0, 0, 100, 100],
      // Source width > target width, source height < target height, diff A/R.
      // Source should be downscaled & cropped, maintaining A/R.
      [100, 300, 67, 0, 66, 200],
      // Source width > target width, source height = target height.
      // Source should be downscaled & cropped, maintaining A/R.
      [100, 200, 50, 0, 100, 200],
      // Source width > target width, source height > target height.
      // Source should be downscaled & cropped, maintaining A/R.
      [100, 50, 0, 25, 100, 50],
    ];
    foreach ($testData as $data) {
      $targetWidth = $data[0];
      $targetHeight = $data[1];
      $cropX = $data[2];
      $cropY = $data[3];
      $resultWidth = $data[4];
      $resultHeight = $data[5];

      $this->file = drupal_get_path('module', 'image_scale_and_crop_without_upscale') . '/tests/images/200x200.png';
      $this->image = $this->getImage();
      $this->imageTestReset();

      $this->assertImageEffect('image_scale_and_crop_without_upscale', [
        'width' => $targetWidth,
        'height' => $targetHeight,
      ]);
      $this->assertToolkitOperationsCalled(['scale_and_crop']);

      // Check the parameters.
      $calls = $this->imageTestGetAllCalls();
      $this->assertEqual($calls['scale_and_crop'][0][0], $cropX, 'X was computed and passed correctly for data set ' . serialize($data));
      $this->assertEqual($calls['scale_and_crop'][0][1], $cropY, 'Y was computed and passed correctly for data set ' . serialize($data));
      $this->assertEqual($calls['scale_and_crop'][0][2], $resultWidth, 'Width was computed and passed correctly for data set ' . serialize($data));
      $this->assertEqual($calls['scale_and_crop'][0][3], $resultHeight, 'Height was computed and passed correctly for data set ' . serialize($data));
    }
  }

  /**
   * Asserts the effect processing of an image effect plugin.
   *
   * @param string $effect_name
   *   The name of the image effect to test.
   * @param array $data
   *   The data to pass to the image effect.
   *
   * @return bool
   *   TRUE if the assertion succeeded, FALSE otherwise.
   */
  protected function assertImageEffect($effect_name, array $data) {
    $effect = $this->manager->createInstance($effect_name, ['data' => $data]);
    return $this->assertTrue($effect->applyEffect($this->image), 'Function returned the expected value.');
  }

}
