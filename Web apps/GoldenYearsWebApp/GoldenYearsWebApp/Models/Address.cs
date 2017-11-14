using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace GoldenYearsWebApp.Models
{
    public class Address
    {
        private ICollection<Booking> _bookings;
        public Address()
        {
            _bookings = new List<Booking>();
        }

        public int Address_id { get; set;}
        public string Address_street { get; set; }
        public string Address_street2 { get; set; }
        public string City { get; set; }
        public string County { get; set; }
        public string Eircode { get; set; }
        public float Address_geo_latitude { get; set; }
        public float Address_geo_longitute { get; set; }

        public virtual ICollection<Booking> Bookings
        {
            get { return _bookings; }
            set { _bookings = value; }
        }


   
    }
}