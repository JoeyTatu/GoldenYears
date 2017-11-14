using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace Golden_Years1.Controllers
{
    public class HomeController : Controller
    {
        public ActionResult Index()
        {
            return View();
        }

        public ActionResult About()
        {
            ViewBag.Message = "Your application description page.";

            return View();
        }

        public ActionResult Events()
        {
            ViewBag.Message = "Events page";

            return View();
        }

        public ActionResult Education()
        {
            ViewBag.Message = "Education page";

            return View();
        }

        public ActionResult Medical()
        {
            ViewBag.Message = "Medical page";

            return View();
        }
    }
}