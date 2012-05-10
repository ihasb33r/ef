<?php

/* AcmeUserBundle:Default:buy_new.html.twig */
class __TwigTemplate_a56a510efc2f4ad58eb7fab1111e7c85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"row\">
    <div class=\"twelve columns\">
        <img style=\"position:relative;top:10px;\" src=\"/images/backgroundarticle.png\">
    </div>
</div>
<div class=\"row header\">
<div class=\"twelve columns\">

</div>
</div>
<div class=\"row article\">
    <div class=\"six columns offset-by-one form\">


<div class=\"fos_user_agora\">
";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "kod"));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 21
            echo "<h6>Η αγορά σας πραγματοποιήθηκε επιτυχώς</h6>
<h6>Ο κωδικός αγοράς σας είναι:000000";
            // line 22
            echo twig_escape_filter($this->env, $this->getContext($context, "key"), "html", null, true);
            echo "</h6>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 24
        echo "

</div>
</form>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "AcmeUserBundle:Default:buy_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
