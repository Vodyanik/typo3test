<?php

class Frontend_action_contentelement_3e5bd5a86e5d58ea52328a17732d7df88fee935e extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<footer id="footer">
    <div class="inner">
        <ul class="icons">
            <li>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return '&nbsp;';
};
$arguments7 = array();
$arguments7['parameter'] = NULL;
$arguments7['target'] = '';
$arguments7['class'] = '';
$arguments7['title'] = '';
$arguments7['additionalParams'] = '';
$arguments7['additionalAttributes'] = array (
);
$arguments7['useCacheHash'] = false;
$array9 = array (
);$arguments7['parameter'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_twitter', $array9);
$arguments7['class'] = 'icon fa-twitter';

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

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
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_twitter', $array4);

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
            </li>
            <li>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return '&nbsp;';
};
$arguments16 = array();
$arguments16['parameter'] = NULL;
$arguments16['target'] = '';
$arguments16['class'] = '';
$arguments16['title'] = '';
$arguments16['additionalParams'] = '';
$arguments16['additionalAttributes'] = array (
);
$arguments16['useCacheHash'] = false;
$array18 = array (
);$arguments16['parameter'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_github', $array18);
$arguments16['class'] = 'icon fa-github';

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output15 .= '
                ';
return $output15;
};
$arguments10 = array();
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$arguments10['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array12 = array();
$array13 = array (
);$array12['0'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_github', $array13);

$expression14 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments10['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression14(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array12)
					),
					$renderingContext
				);
$arguments10['__thenClosure'] = $renderChildrenClosure11;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '
            <li>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$output24 = '';

$output24 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return '&nbsp;';
};
$arguments25 = array();
$arguments25['parameter'] = NULL;
$arguments25['target'] = '';
$arguments25['class'] = '';
$arguments25['title'] = '';
$arguments25['additionalParams'] = '';
$arguments25['additionalAttributes'] = array (
);
$arguments25['useCacheHash'] = false;
$array27 = array (
);$arguments25['parameter'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_busket', $array27);
$arguments25['class'] = 'icon fa-dribbble';

$output24 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output24 .= '
                ';
return $output24;
};
$arguments19 = array();
$arguments19['then'] = NULL;
$arguments19['else'] = NULL;
$arguments19['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array21 = array();
$array22 = array (
);$array21['0'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_busket', $array22);

$expression23 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments19['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression23(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array21)
					),
					$renderingContext
				);
$arguments19['__thenClosure'] = $renderChildrenClosure20;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output0 .= '
            </li>
            <li>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return '&nbsp;';
};
$arguments34 = array();
$arguments34['parameter'] = NULL;
$arguments34['target'] = '';
$arguments34['class'] = '';
$arguments34['title'] = '';
$arguments34['additionalParams'] = '';
$arguments34['additionalAttributes'] = array (
);
$arguments34['useCacheHash'] = false;
$array36 = array (
);$arguments34['parameter'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_email', $array36);
$arguments34['class'] = 'icon fa-envelope-o';

$output33 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output33 .= '
                ';
return $output33;
};
$arguments28 = array();
$arguments28['then'] = NULL;
$arguments28['else'] = NULL;
$arguments28['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array30 = array();
$array31 = array (
);$array30['0'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_email', $array31);

$expression32 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments28['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression32(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array30)
					),
					$renderingContext
				);
$arguments28['__thenClosure'] = $renderChildrenClosure29;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output0 .= '
            </li>
        </ul>
        <ul class="copyright">
            <li>© Untitled</li>
            <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
        </ul>
    </div>
</footer>
';

return $output0;
}


}
#