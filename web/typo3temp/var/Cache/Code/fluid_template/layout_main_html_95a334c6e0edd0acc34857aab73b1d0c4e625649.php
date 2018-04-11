<?php

class layout_main_html_95a334c6e0edd0acc34857aab73b1d0c4e625649 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '<header id="header" style="background-position: left -92px;">
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['typoscriptObjectPath'] = NULL;
$arguments1['data'] = NULL;
$arguments1['currentValueKey'] = NULL;
$arguments1['table'] = '';
$arguments1['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array3 = array();
$array3['colPos'] = 0;
$arguments1['data'] = $array3;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
</header>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['section'] = NULL;
$arguments4['partial'] = NULL;
$arguments4['delegate'] = NULL;
$arguments4['renderable'] = NULL;
$arguments4['arguments'] = array (
);
$arguments4['optional'] = false;
$arguments4['default'] = NULL;
$arguments4['contentAs'] = NULL;
$arguments4['section'] = 'content';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#