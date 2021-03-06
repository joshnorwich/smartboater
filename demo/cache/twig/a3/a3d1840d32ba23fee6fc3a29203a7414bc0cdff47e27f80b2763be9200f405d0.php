<?php

/* @particles/owlcarousel/testimonial.html.twig */
class __TwigTemplate_505399cfc9bbbd5088a55df49d4a3634c1b15fedd726ca7f4cb5023fb3d7cbd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@particles/owlcarousel.html.twig", "@particles/owlcarousel/testimonial.html.twig", 1);
        $this->blocks = array(
            'layout' => array($this, 'block_layout'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@particles/owlcarousel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_layout($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "class", array()));
        echo " g-owlcarousel-layout-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "layout", array()));
        echo " g-owlcarousel-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "displayitems", array()), "html", null, true);
        echo "-items ";
        if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "nav", array()) == "disabled")) {
            echo "g-owlcarousel-nav-disabled";
        }
        echo "\">
    ";
        // line 6
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array())) {
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array());
            echo "</h2>";
        }
        // line 7
        echo "    <div id=\"g-owlcarousel-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"g-owlcarousel owl-carousel ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "width", array()));
        echo "\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo "        <div class=\"item\">
            ";
            // line 10
            if ($this->getAttribute($context["item"], "desc", array())) {
                // line 11
                echo "            <div class=\"g-owlcarousel-item-desc\">
                ";
                // line 12
                if ($this->getAttribute($context["item"], "icon", array())) {
                    echo "<i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()), "html", null, true);
                    echo "\"></i>";
                }
                // line 13
                echo "                ";
                echo $this->getAttribute($context["item"], "desc", array());
                echo "
                ";
                // line 14
                if ($this->getAttribute($context["item"], "title", array())) {
                    echo "<div class=\"g-owlcarousel-item-title\">";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</div>";
                }
                // line 15
                echo "            </div>
            ";
            }
            // line 17
            echo "
            ";
            // line 18
            if (($this->getAttribute($context["item"], "authorimage", array()) || $this->getAttribute($context["item"], "author", array()))) {
                // line 19
                echo "            <div class=\"g-owlcarousel-author\">
                ";
                // line 20
                if ($this->getAttribute($context["item"], "authorimage", array())) {
                    // line 21
                    echo "                    <div class=\"g-owlcarousel-author-image\">
                        <span class=\"author-image\">
                            <img src=\"";
                    // line 23
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "authorimage", array())));
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "author", array()));
                    echo "\" />
                        </span>
                    </div>
                ";
                }
                // line 27
                echo "
                ";
                // line 28
                if (($this->getAttribute($context["item"], "author", array()) || $this->getAttribute($context["item"], "subtitle", array()))) {
                    // line 29
                    echo "                <div class=\"g-owlcarousel-author-details\">
                    ";
                    // line 30
                    if ($this->getAttribute($context["item"], "author", array())) {
                        echo "<span class=\"author-name\">";
                        echo $this->getAttribute($context["item"], "author", array());
                        echo "</span>";
                    }
                    // line 31
                    echo "                    ";
                    if ($this->getAttribute($context["item"], "subtitle", array())) {
                        echo "<span class=\"author-subtitle\">";
                        echo $this->getAttribute($context["item"], "subtitle", array());
                        echo "</span>";
                    }
                    // line 32
                    echo "                </div>
                ";
                }
                // line 34
                echo "            </div>
            ";
            }
            // line 36
            echo "        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@particles/owlcarousel/testimonial.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 38,  142 => 36,  138 => 34,  134 => 32,  127 => 31,  121 => 30,  118 => 29,  116 => 28,  113 => 27,  104 => 23,  100 => 21,  98 => 20,  95 => 19,  93 => 18,  90 => 17,  86 => 15,  80 => 14,  75 => 13,  69 => 12,  66 => 11,  64 => 10,  61 => 9,  57 => 8,  50 => 7,  44 => 6,  31 => 5,  28 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@particles/owlcarousel.html.twig' %}

{# Testimonial Layout #}
{% block layout %}
<div class=\"{{ particle.class|e }} g-owlcarousel-layout-{{ particle.layout|e }} g-owlcarousel-{{ particle.displayitems }}-items {% if particle.nav == 'disabled' %}g-owlcarousel-nav-disabled{% endif %}\">
    {% if particle.title %}<h2 class=\"g-title\">{{ particle.title|raw }}</h2>{% endif %}
    <div id=\"g-owlcarousel-{{ id }}\" class=\"g-owlcarousel owl-carousel {{ particle.width|e }}\">
        {% for item in particle.items %}
        <div class=\"item\">
            {% if item.desc %}
            <div class=\"g-owlcarousel-item-desc\">
                {% if item.icon %}<i class=\"{{ item.icon }}\"></i>{% endif %}
                {{ item.desc|raw }}
                {% if item.title %}<div class=\"g-owlcarousel-item-title\">{{ item.title|raw }}</div>{% endif %}
            </div>
            {% endif %}

            {% if item.authorimage or item.author %}
            <div class=\"g-owlcarousel-author\">
                {% if item.authorimage %}
                    <div class=\"g-owlcarousel-author-image\">
                        <span class=\"author-image\">
                            <img src=\"{{ url(item.authorimage)|e }}\" alt=\"{{ item.author|e }}\" />
                        </span>
                    </div>
                {% endif %}

                {% if item.author or item.subtitle %}
                <div class=\"g-owlcarousel-author-details\">
                    {% if item.author %}<span class=\"author-name\">{{ item.author|raw }}</span>{% endif %}
                    {% if item.subtitle %}<span class=\"author-subtitle\">{{ item.subtitle|raw }}</span>{% endif %}
                </div>
                {% endif %}
            </div>
            {% endif %}
        </div>
        {% endfor %}
    </div>
</div>
{% endblock %}
", "@particles/owlcarousel/testimonial.html.twig", "/var/www/vhosts/smartboater.ca/httpdocs/demo/user/themes/rt_protean/particles/owlcarousel/testimonial.html.twig");
    }
}
