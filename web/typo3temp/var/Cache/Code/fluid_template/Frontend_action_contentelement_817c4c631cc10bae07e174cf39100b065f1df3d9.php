<?php

class Frontend_action_contentelement_817c4c631cc10bae07e174cf39100b065f1df3d9 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<div class="inner">
  <a href="#" class="image avatar">
  ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['additionalAttributes'] = NULL;
$arguments11['data'] = NULL;
$arguments11['class'] = NULL;
$arguments11['dir'] = NULL;
$arguments11['id'] = NULL;
$arguments11['lang'] = NULL;
$arguments11['style'] = NULL;
$arguments11['title'] = NULL;
$arguments11['accesskey'] = NULL;
$arguments11['tabindex'] = NULL;
$arguments11['onclick'] = NULL;
$arguments11['alt'] = NULL;
$arguments11['ismap'] = NULL;
$arguments11['longdesc'] = NULL;
$arguments11['usemap'] = NULL;
$arguments11['src'] = NULL;
$arguments11['treatIdAsReference'] = NULL;
$arguments11['image'] = NULL;
$arguments11['crop'] = NULL;
$arguments11['cropVariant'] = 'default';
$arguments11['width'] = NULL;
$arguments11['height'] = NULL;
$arguments11['minWidth'] = NULL;
$arguments11['minHeight'] = NULL;
$arguments11['maxWidth'] = NULL;
$arguments11['maxHeight'] = NULL;
$arguments11['absolute'] = false;
$array13 = array (
);$arguments11['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array13);
$array14 = array (
);$arguments11['alt'] = $renderingContext->getVariableProvider()->getByPath('file.alternative', $array14);
$array15 = array (
);$arguments11['title'] = $renderingContext->getVariableProvider()->getByPath('file.title', $array15);
$arguments11['width'] = 200;

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
    ';
return $output10;
};
$arguments7 = array();
$arguments7['each'] = NULL;
$arguments7['as'] = NULL;
$arguments7['key'] = NULL;
$arguments7['reverse'] = false;
$arguments7['iteration'] = NULL;
$array9 = array (
);$arguments7['each'] = $renderingContext->getVariableProvider()->getByPath('data.image', $array9);
$arguments7['as'] = 'file';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
  ';
return $output6;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('data.image', $array4);

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
  </a>
  ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$output21 = '';

$output21 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$array24 = array (
);return $renderingContext->getVariableProvider()->getByPath('data.bodytext', $array24);
};
$arguments22 = array();
$arguments22['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$arguments22['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output21 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output21 .= '<br />
  ';
return $output21;
};
$arguments16 = array();
$arguments16['then'] = NULL;
$arguments16['else'] = NULL;
$arguments16['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array18 = array();
$array19 = array (
);$array18['0'] = $renderingContext->getVariableProvider()->getByPath('data.bodytext', $array19);

$expression20 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments16['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression20(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array18)
					),
					$renderingContext
				);
$arguments16['__thenClosure'] = $renderChildrenClosure17;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output0 .= '
</div>


';

return $output0;
}


}
#