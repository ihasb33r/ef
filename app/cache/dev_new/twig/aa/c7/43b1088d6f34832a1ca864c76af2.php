<?php

/* AcmeUserBundle:Default:sell.html.twig */
class __TwigTemplate_aac743b1088d6f34832a1ca864c76af2 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sell_add"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo " method=\"POST\" class=\"sell_add\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
    <div>
        <input type=\"submit\" value=\"��������\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "AcmeUserBundle:Default:sell.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
