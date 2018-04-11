<?php

class Frontend_action_contentelement_60f152c45eaba35f38cc2d13410afd792360ac6f extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<!--Two-->
<section id="two">
  <h2>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
      ';
$array7 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array7)]);

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
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('data.header', $array4);

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
  </h2>
  <div class="row">
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$output17 = '';

$output17 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '
                  ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
                    <article class="6u 12u$(xsmall) work-item">
                      <a class="image fit thumb" style="cursor: pointer; outline: 0px;">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['additionalAttributes'] = NULL;
$arguments28['data'] = NULL;
$arguments28['class'] = NULL;
$arguments28['dir'] = NULL;
$arguments28['id'] = NULL;
$arguments28['lang'] = NULL;
$arguments28['style'] = NULL;
$arguments28['title'] = NULL;
$arguments28['accesskey'] = NULL;
$arguments28['tabindex'] = NULL;
$arguments28['onclick'] = NULL;
$arguments28['alt'] = NULL;
$arguments28['ismap'] = NULL;
$arguments28['longdesc'] = NULL;
$arguments28['usemap'] = NULL;
$arguments28['src'] = NULL;
$arguments28['treatIdAsReference'] = NULL;
$arguments28['image'] = NULL;
$arguments28['crop'] = NULL;
$arguments28['cropVariant'] = 'default';
$arguments28['width'] = NULL;
$arguments28['height'] = NULL;
$arguments28['minWidth'] = NULL;
$arguments28['minHeight'] = NULL;
$arguments28['maxWidth'] = NULL;
$arguments28['maxHeight'] = NULL;
$arguments28['absolute'] = false;
$array30 = array (
);$arguments28['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array30);
$array31 = array (
);$arguments28['alt'] = $renderingContext->getVariableProvider()->getByPath('file.alternative', $array31);
$array32 = array (
);$arguments28['title'] = $renderingContext->getVariableProvider()->getByPath('file.title', $array32);

$output27 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output27 .= '
                      </a>
                      <h3>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
                          ';
$array39 = array (
);
$output38 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data_item.tx_mask_article_sub_header', $array39)]);

$output38 .= '<br />
                        ';
return $output38;
};
$arguments33 = array();
$arguments33['then'] = NULL;
$arguments33['else'] = NULL;
$arguments33['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array35 = array();
$array36 = array (
);$array35['0'] = $renderingContext->getVariableProvider()->getByPath('data_item.tx_mask_article_sub_header', $array36);

$expression37 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments33['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression37(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array35)
					),
					$renderingContext
				);
$arguments33['__thenClosure'] = $renderChildrenClosure34;

$output27 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output27 .= '
                      </h3>
                      <p>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$output45 = '';

$output45 .= '
                          ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$array48 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data_item.tx_mask_article_text', $array48)]);
};
$arguments46 = array();
$arguments46['value'] = NULL;
$renderChildrenClosure47 = ($arguments46['value'] !== null) ? function() use ($arguments46) { return $arguments46['value']; } : $renderChildrenClosure47;
$output45 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output45 .= '<br />
                        ';
return $output45;
};
$arguments40 = array();
$arguments40['then'] = NULL;
$arguments40['else'] = NULL;
$arguments40['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array42 = array();
$array43 = array (
);$array42['0'] = $renderingContext->getVariableProvider()->getByPath('data_item.tx_mask_article_text', $array43);

$expression44 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments40['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression44(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array42)
					),
					$renderingContext
				);
$arguments40['__thenClosure'] = $renderChildrenClosure41;

$output27 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output27 .= '
                      </p>
                    </article>
                  ';
return $output27;
};
$arguments24 = array();
$arguments24['each'] = NULL;
$arguments24['as'] = NULL;
$arguments24['key'] = NULL;
$arguments24['reverse'] = false;
$arguments24['iteration'] = NULL;
$array26 = array (
);$arguments24['each'] = $renderingContext->getVariableProvider()->getByPath('data_item.tx_mask_article_img', $array26);
$arguments24['as'] = 'file';

$output23 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= '
                ';
return $output23;
};
$arguments18 = array();
$arguments18['then'] = NULL;
$arguments18['else'] = NULL;
$arguments18['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array20 = array();
$array21 = array (
);$array20['0'] = $renderingContext->getVariableProvider()->getByPath('data_item.tx_mask_article_img', $array21);

$expression22 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments18['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression22(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array20)
					),
					$renderingContext
				);
$arguments18['__thenClosure'] = $renderChildrenClosure19;

$output17 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '
        ';
return $output17;
};
$arguments14 = array();
$arguments14['each'] = NULL;
$arguments14['as'] = NULL;
$arguments14['key'] = NULL;
$arguments14['reverse'] = false;
$arguments14['iteration'] = NULL;
$array16 = array (
);$arguments14['each'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_article', $array16);
$arguments14['as'] = 'data_item';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output13 .= '
    ';
return $output13;
};
$arguments8 = array();
$arguments8['then'] = NULL;
$arguments8['else'] = NULL;
$arguments8['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array10 = array();
$array11 = array (
);$array10['0'] = $renderingContext->getVariableProvider()->getByPath('data.tx_mask_article', $array11);

$expression12 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments8['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression12(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array10)
					),
					$renderingContext
				);
$arguments8['__thenClosure'] = $renderChildrenClosure9;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output0 .= '
  </div>
  <ul class="actions">
    <li>
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$output54 = '';

$output54 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return 'Full portfolio';
};
$arguments55 = array();
$arguments55['parameter'] = NULL;
$arguments55['target'] = '';
$arguments55['class'] = '';
$arguments55['title'] = '';
$arguments55['additionalParams'] = '';
$arguments55['additionalAttributes'] = array (
);
$arguments55['useCacheHash'] = false;
$array57 = array (
);$arguments55['parameter'] = $renderingContext->getVariableProvider()->getByPath('data.header_link', $array57);
$arguments55['class'] = 'button';

$output54 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output54 .= '<br />
      ';
return $output54;
};
$arguments49 = array();
$arguments49['then'] = NULL;
$arguments49['else'] = NULL;
$arguments49['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array51 = array();
$array52 = array (
);$array51['0'] = $renderingContext->getVariableProvider()->getByPath('data.header_link', $array52);

$expression53 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments49['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression53(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array51)
					),
					$renderingContext
				);
$arguments49['__thenClosure'] = $renderChildrenClosure50;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output0 .= '
    </li>
  </ul>
</section>
';

return $output0;
}


}
#