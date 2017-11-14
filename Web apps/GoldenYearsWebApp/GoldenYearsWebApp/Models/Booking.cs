using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace GoldenYearsWebApp.Models
{
    public class Booking
    {
        private ICollection<Address> _addresses;
        public Booking()
        {
            _addresses = new List<Address>();
        }
        public int Booking_id { get; set; }
        public int Customer_id { get; set; }
        public int Event_id { get; set; }
        public Boolean Paying_through_vendor { get; set; }
        public int transaction_id { get; set; }

        public virtual ICollection<Address> Addresses
        {
            get { return _addresses; }
            set { _addresses = value; }
        }
    }
}