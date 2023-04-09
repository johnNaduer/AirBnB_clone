#!/usr/bin/python3
""" DataBase storage"""

import json
from os import getenv
from models.base_model import BaseModel
from models.base_model import Base
from models.user import User
from models.state import State
from models.city import City
from models.amenity import Amenity
from models.place import Place
from models.review import Review
from sqlalchemy import create_engine
from sqlalchemy.orm import sessionmaker, scoped_session

class DBStorage:

    __engine = None
    __session = None

    def __init__(self):

        user = getenv("HBNB_MYSQL_USER")
        password = getenv("HBNB_MYSQL_PWD")
        host = getenv("HBNB_MYSQL_HOST")
        database = getenv("HBNB_MYSQL_DB")
        self.__engine = create_engine('mysql+mysqldb://{}:{}@{}/{}'.format(user, password, host, database) ,pool_pre_ping=True)

        if getenv("HBNB_ENV") == 'test':
            Base.metadata.drop_all(bind=self.__engine)
        
    def all(self, cls=None):
        objects = {}
        classes = [User, State, City, Amenity, Place, Review]
        if cls:
            for obj in self.__session.query(cls):
                key = "{}.{}".format(type(obj).__name__, obj.id)
                objects[key] = obj
        else:
            for clazz in BaseModel.__subclasses__():
                for obj in self.__session.query(clazz):
                    key = "{}.{}".format(type(obj).__name__, obj.id)
                    objects[key] = obj
        return objects

    def new(self, obj):
        self.__session.add(obj)

    def save(self):
        self.__session.commit()

    def delete(self, obj=None):
        if obj:
            self.__session.delete(obj)

    def reload(self):
        Base.metadata.create_all(self.__engine)
        session_factory = sessionmaker(bind=self.__engine,
                                       expire_on_commit=False)
        self.__session = scoped_session(session_factory)()

    def close(self):
        """ session close """
        self.__session.close()
